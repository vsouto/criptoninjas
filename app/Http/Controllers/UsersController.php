<?php

namespace App\Http\Controllers;

use App\Cripto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use ViewComponents\Eloquent\EloquentDataProvider;
use ViewComponents\Grids\Component\Column;
use ViewComponents\Grids\Component\ColumnSortingControl;
use ViewComponents\Grids\Component\PageTotalsRow;
use ViewComponents\Grids\Component\TableCaption;
use ViewComponents\Grids\Grid;
use ViewComponents\ViewComponents\Component\Control\FilterControl;
use ViewComponents\ViewComponents\Component\Control\PageSizeSelectControl;
use ViewComponents\ViewComponents\Component\Control\PaginationControl;
use ViewComponents\ViewComponents\Component\Html\Tag;
use ViewComponents\ViewComponents\Component\Part;
use ViewComponents\ViewComponents\Customization\CssFrameworks\BootstrapStyling;
use ViewComponents\ViewComponents\Data\Operation\FilterOperation;
use ViewComponents\ViewComponents\Input\InputSource;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
/*
    public function index()
    {
        $provider = new EloquentDataProvider(User::class);
        $input = new InputSource($_GET);

        // create grid
        $grid = new Grid(
            $provider,
            // all components are optional, you can specify only columns
            [
                new TableCaption('Users'),
                new Column('id'),
                new Column('name'),
                new Column('email'),
                new Column('initial_amount'),
                new Column('initial_currency'),
                new Column('initial_value'),
                new Column('initial_date'),
                new Column('job_title'),
                //new DetailsRow(new SymfonyVarDump()), // when clicking on data rows, details will be shown
                new PaginationControl($input->option('page', 1), 5), // 1 - default page, 5 -- page size
                new PageSizeSelectControl($input->option('page_size', 5), [2, 5, 10]), // allows to select page size
                new ColumnSortingControl('id', $input->option('sort')),
                new Part(new Tag('tr'), 'control_row2', 'table_heading'),
                (new FilterControl('id', FilterOperation::OPERATOR_EQ, $input->option('id'))),
                (new FilterControl('name', FilterOperation::OPERATOR_STR_CONTAINS, $input->option('name'))),
                new PageTotalsRow([
                    'id' => PageTotalsRow::OPERATION_IGNORE,
                ])
            ]
        );

        //  but also you can add some styling:
        $customization = new BootstrapStyling();
        $customization->apply($grid);

        return view('users.index', compact('grid'));
    }

    public function create()
    {

    }*/

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required|email',
            'initial_amount' => 'required',
            'initial_currency' => 'required',
            'initial_value' => 'required',
            'initial_date' => 'required',
        ]);

        $data = Input::all();

        $save = User::create($data);

        return view('users.index');
    }


    public function saveKeys()
    {
        $public = Input::get('public_key');
        $secret = Input::get('secret_key');

        $save = User::where('id',Auth::user()->id)->update([
            'hitbtc_public_key' => $public,
            'hitbtc_private_key' => $secret
        ]);

        return $save;
    }

    public function refreshAccount()
    {
        $user = Auth::user();

        $client = new \Hitbtc\ProtectedClient( $user->hitbtc_public_key, $user->hitbtc_private_key, $demo = false);

        $user_balance = 0;

        try {
            foreach ($client->getBalanceTrading() as $balance) {

                $cripto = Cripto::where('base', $balance->getCurrency())
                    ->where('quote', 'USD')
                    ->first();

                if (!$cripto)
                    continue;

                // Detach the cripto
                if ($user->criptos->where('base', $balance->getCurrency())->first())
                    $user->criptos()->detach($cripto->id);

                // Only add to funds if based on USD or USDT
                if ($balance->getAvailable() > 0) {

                    // Attach the cripto for this user
                    $user->criptos()->attach($cripto, ['amount' => $balance->getAvailable()]);

                    $adds = $balance->getAvailable() * $cripto->price;

                    //echo 'ADDING ' . $adds . ' funds to ' . $cripto->base;
                    $user_balance += $adds;

                    //echo 'adding ' . $balance->getAvailable() . ' ' . $cripto->name . ' price = ' .  $cripto->price . '<br>';
                    //echo 'balance: ' . $user_balance . '<br>';
                }
                else {
                    //echo '============ 0 funds on ' . $cripto->name . '<br>';
                }
            }

        } catch (\Hitbtc\Exception\InvalidRequestException $e) {
            report($e);

            return false;

        } catch (\Exception $e) {
            report($e);

            return false;
        }

        $user->update(['balance' => $user_balance]);

        return $user;
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function getCurrentPlan($user = false)
    {
        if (!$user)
            $user = Auth::user();

        dd($user->plans->take(1));
    }
}

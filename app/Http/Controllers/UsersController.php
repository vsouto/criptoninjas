<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    }

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
}

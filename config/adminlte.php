<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title ta title section.
    | You can optg
    | of your page. You can override it per page with theionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'LV Diagnostic Center',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>LV </b>Diagnostic Center',
    'logo_mini' => '<b>LV</b>DC',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'bluegreen',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => 'fixed',

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    'addNew_url' => 'add-patient',

    'patientsToday_url' => 'patients-today',

    'addmissions_url' => 'addmissions-list',

    'patients_url' => 'patients-list',

    'medicalStaffs_url' => 'medical-staffs-list',




    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */
    'menu' => [
        'ADMISSIONS',
        [
            'text' => 'Take In',
            'url'  => '/add-patient',
            'icon' => 'arrow-right',
        ],
        [
            'text'  => 'Patients Today',
            'url'   => '/patients-today',
            'icon'  => 'calendar-check-o',
        ],
        'MASTERLISTS',
        [
            'text' => 'Admissions',
            'url'  => '/admissions-list',
            'icon' => 'file-text',
        ],
        [
            'text' => 'Patients',
            'url'  => '/patients-list',
            'icon' => 'user',
        ],
        [
            'text' => 'Medical Staffs',
            'url'  => '/medical-staffs-list',
            'icon' => 'medkit',
        ],
        
        // 'STATISTICS',
        // [
        //     'text' => 'Patient\'s Tally',
        //     'url'  => '/statistics/patients-tally',
        //     'icon' => 'area-chart',
        // ],
        // [
        //     'text' => 'Departments',
        //     'url'  => '/statistics/departments',
        //     'icon' => 'bar-chart',
        // ],
        // [
        //     'text' => 'Medicines',
        //     'url'  => '/statistics/medicines',
        //     'icon' => 'pie-chart',
        // ],
        // [
        //     'text' => 'Expenses',
        //     'url'  => '/statistics/expenses',
        //     'icon' => 'line-chart',
        //     'color' => 'black'
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
    ],
];

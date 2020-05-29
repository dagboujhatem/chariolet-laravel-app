<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        // edit role column
        $dataTable->editColumn('role', function(User $user) {
            return $user->getRoleNames()->first();
        });
        // edit CIN column
        $dataTable->editColumn('cin', function(User $user) {
            return $user->getCIN();
        });
        // edit credit card number column
//        $dataTable->editColumn('credit_card_number', function(User $user) {
//            return $user->getCreditCardNumber();
//        });

        // edit approved_at column
        $dataTable->editColumn('approved_at', function(User $user) {
            return view('users.approve', ['user'=>$user]);
        });

        // add action column
        $dataTable->addColumn('action', 'users.datatables_actions');

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['title' => 'Actions', 'printable' => false, 'class' => 'text-center'])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'text'=>'<i class="fa fa-plus"></i> Ajouter',
                        'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'text'=>'<i class="fa fa-download"></i> Exportation <span class="caret"></span>',
                        'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'text'=>'<i class="fa fa-print"></i> Imprimer',
                        'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'text'=>'<i class="fa fa-undo"></i> Réinitialiser',
                        'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'text'=>'<i class="fa fa-refresh"></i> Rafraîchir',
                        'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'first_name', 'name'=> 'first_name',
                'title' => 'Nom'],
            ['data' => 'last_name', 'name'=> 'last_name',
                'title' => 'Prénom'],
            ['data' => 'cin', 'name'=> 'cin', 'title' => 'CIN',
                'searchable' => false, 'orderable' => false, 'printable' => true],
//            ['data' => 'credit_card_number', 'name'=> 'credit_card_number',
//                'title' => 'Carte bancaire', 'searchable' => false],
            ['data' => 'email', 'name'=> 'email',
                'title' => 'E-mail'],
            ['data' => 'role', 'name'=> 'role', 'title' => 'Rôle',
                'searchable' => false, 'orderable' => false, 'printable' => true],
//          ['data' => 'password', 'name'=> 'password',
//                'title' => 'Mot de passe'],
            ['data' => 'approved_at', 'name'=> 'approved_at', 'title' => 'Approuver',
                'searchable' => true, 'orderable' => true, 'printable' => true],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return '$MODEL_NAME_PLURAL_SNAKE_$datatable_' . time();
    }
}

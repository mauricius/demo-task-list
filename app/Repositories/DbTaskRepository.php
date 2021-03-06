<?php

namespace App\Repositories;

use App\Models\Task;
use App\Contracts\TaskContract;

class DbTaskRepository implements TaskContract
{
    protected $model;

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    /**
     * Istanza della Model.
     *
     * @return \App\Models\Task
     */
    public function model()
    {
        return $this->model;
    }

    /**
     * Tutti i Tasks.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->with('author')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Tutti i Tasks suddivisi per pagina.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage = 5)
    {
        return $this->model->with('author')->orderBy('created_at', 'desc')->paginate($perPage);
    }

    /**
     * Trova un Task.
     *
     * @param  int $id
     * @return \App\Models\Task
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Crea un Task.
     *
     * @param  array  $input
     * @return \App\Models\Task
     */
    public function create(array $input)
    {
        return $this->model->create($input);
    }

    /**
     * Aggiorna un Task.
     *
     * @param  int    $id
     * @param  array  $input
     * @return \App\Models\Task
     */
    public function update($id, array $input)
    {
        $task = $this->find($id);

        $task->fill($input);
        $task->save();

        return $task;
    }

    /**
     * Elimina un Task.
     *
     * @param  int $id
     * @return void
     */
    public function delete($id)
    {
        $task = $this->find($id);
        $task->delete();
    }
}

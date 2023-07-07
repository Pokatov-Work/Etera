<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

/**
 * Class BaseModel - базовый класс для всех моделей
 * Базовая модель для всех моделей в системе
 */
abstract class BaseModel extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at',  'updated_at', 'updated_by', 'deleted_at', 'deleted_by'];

    /**
     * Список заполняемых полей
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * Получить обьект по ID
     *
     * @param  int | string  $id
     * @return object|null
     */
    public static function getObj(int|string $id): ?object
    {
        $query = self::select();

        return $query->find($id);
    }

    /**
     * Получить query для выборки всех значений
     *
     * @return mixed
     */
    public static function getQueryAll(): mixed
    {
        $query = self::select();

        return $query;
    }

    /**
     * Получить колекцию обьектов
     *
     * @return Illuminate\Database\Eloquent\Collection|null
     */
    public static function getList(): ?object
    {
        $collections = self::getQueryAll()->get();

        return $collections;
    }

    /**
     * Получить колекцию обьектов
     *
     * @return Illuminate\Database\Eloquent\Collection|null
     */
    public static function getListByIds(array $idList): ?object
    {
        $collections = self::getQueryAll()
            ->whereIn('id', $idList)
            ->get();

        return $collections;
    }

    /**
     * Создать обьект.
     *
     * @param $data
     * @return object - созданный обьект
     */
    public static function createObj($data): object
    {
        return self::create($data);
    }

    /**
     * Обновить обьект
     *
     * @param $id
     * @param $data
     * @return object|null
     */
    public static function updateObj($id, $data): ?object
    {
        $item = self::find($id);

        if (null != $item) {
            // Log::debug('ITEM FOUNDED ID:'.$id);
            $item->fill($data);
            $item->save();

            return $item;
        }

        return null;
    }
}

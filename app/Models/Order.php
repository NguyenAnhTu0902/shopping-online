<?php

namespace App\Models;

use App\Constants\CommonConstants;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phone',
        'email',
        'status',
        'payment'
    ];
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getStatusAttribute($value)
    {
        $openBTag = '<b>';
        $closeTag = '</b></span>';
        return match ($value) {
            CommonConstants::order_status_ReceiveOrders =>
                "<span class='text-primary'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_ReceiveOrders] .
                $closeTag,
            CommonConstants::order_status_Unconfirmed =>
                "<span class='text-warning-custom'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Unconfirmed] .
                $closeTag,
            CommonConstants::order_status_Confirmed =>
                "<span class='text-success'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Confirmed] .
                $closeTag,
            CommonConstants::order_status_Paid =>
                "<span class='text-success'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Paid] .
                $closeTag,
            CommonConstants::order_status_Processing =>
                "<span class='text-info'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Processing] .
                $closeTag,
            CommonConstants::order_status_Shipping =>
                "<span class='text-info'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Shipping] .
                $closeTag,
            CommonConstants::order_status_Finish =>
                "<span class='text-success'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Finish] .
                $closeTag,
            CommonConstants::order_status_Cancel =>
                "<span class='text-danger'>" . $openBTag
                . CommonConstants::$order_status[CommonConstants::order_status_Cancel] .
                $closeTag,
            default => null
        };
    }

    public function scopeTimeInYear($query, $type = true)
    {
        if ($type) {
            $query->whereMonth('payment', Carbon::now()->month);
        } else {
            $query->whereMonth('payment', Carbon::now()->subMonth()->month);
        }
        $query->whereYear('payment', Carbon::now()->year);
        return $query;
    }

}

<?php
namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Order;
use CodeCommerce\OrderStatus;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class OrdersController extends Controller
{
    private $ordersModel;
    private $orderStatusesModel;
    /**
     * @param Order $order
     * @param OrderStatus $orderStatus
     */
    public function __construct(Order $order, OrderStatus $orderStatus)
    {
        $this->ordersModel = $order;
        $this->orderStatusesModel = $orderStatus;
    }

    public function index()
    {
        $orders = $this->ordersModel->paginate(10);
        $statuses = $this->orderStatusesModel->lists('name', 'id');;
        return view('admin.orders.index', compact('orders', 'statuses'));
    }
    
    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->ordersModel->find($id)->update($request->all());
        return redirect()->route('admin.orders');
    }
}

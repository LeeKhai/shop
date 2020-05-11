<?php

namespace App\Http\Controllers;

use App\Repositories\ItemRepository;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    /**
     * Show all item
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump('aaaaaaa');
        $items = $this->itemRepository->getAll();

        return view('home.items', compact('items'));
    }

    /**
     * Show single item
     *
     * @param $id int Item ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->find($id);

        return view('home.post', compact('item'));
    }

    /**
     * Create single item
     *
     * @param $request \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $item = $this->itemRepository->create($data);

        return view('shop.home', compact('item'));
    }

    /**
     * Update single item
     *
     * @param $request \Illuminate\Http\Request
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here

        $item = $this->itemRepository->update($id, $data);

        return view('home.post', compact('item'));
    }

    /**
     * Delete single item
     *
     * @param $id int item ID
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->itemRepository->delete($id);

        return view('home.post');
    }
}

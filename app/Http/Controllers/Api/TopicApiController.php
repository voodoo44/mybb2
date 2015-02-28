<?php

namespace MyBB\Core\Http\Controllers\Api;

use Illuminate\Http\Request;
use League\Fractal\Manager;
use MyBB\Core\Http\Requests;
use MyBB\Core\Database\Repositories\ITopicRepository;
use MyBB\Core\Transformers\TopicTransformer;
use MyBB\Core\Http\Controllers\Api\ApiController;


class TopicApiController extends ApiController
{
    public $topicRepository;

    public function __construct(ITopicRepository $topicRepository, Manager $fractal)
    {
        parent::__construct($fractal);
        $this->topicRepository = $topicRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $topics = $this->topicRepository->all();

        if(!$topics)
        {
            // TODO: respond with error
        }

        return $this->respondWithCollection($topics, new TopicTransformer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Help_Article;
use Illuminate\Http\Request;
use App\Models\XpirixContent;

class HelpArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Help_Article  $help_Article
     * @return \Illuminate\Http\Response
     */
    public function show(Help_Article $help_Article)
    {
        $contents = XpirixContent::find(1);
        return view('xpirix.body.help_center.lifespot_help.help_articles.show', compact('help_Article','contents'));
    }

    public function access()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.access_is_here',compact('contents'));
    }

    public function membersImportant()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.members_most_important',compact('contents'));
    }

    public function protectDocuments()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.protect_your_documents',compact('contents'));
    }

    public function privateLifespot()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.private_lifespot_article',compact('contents'));
    }

    public function growLifespot()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.grow_with_lifespot_article',compact('contents'));
    }

    public function webspotArticle()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('xpirix.body.help_center.lifespot_help.help_articles.webspot_article',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help_Article  $help_Article
     * @return \Illuminate\Http\Response
     */
    public function edit(Help_Article $help_Article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help_Article  $help_Article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help_Article $help_Article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help_Article  $help_Article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help_Article $help_Article)
    {
        //
    }
}

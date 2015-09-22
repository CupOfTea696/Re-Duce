<?php namespace ReDuce\Http\Controllers;

use ReDuce\Http\Requests;
use ReDuce\Models\ShortLink;
use ReDuce\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class ShortLinkController extends Controller
{
    
    /**
     * Redirect the ShortLink to the mapped URI
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function redirect($slug)
    {
        $link = ShortLink::where('slug', $slug)->first();
        
        return redirect()->away($link->uri, Response::HTTP_TEMPORARY_REDIRECT);
    }
    
    /**
     * Store a newly created ShortLink in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified ShortLink.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }
    
    /**
     * Update the specified ShortLink in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
    }
    
    /**
     * Remove the specified ShortLink from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
    }
    
}

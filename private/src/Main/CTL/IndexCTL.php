<?php
/**
 *  IndexCTL.php
 *  Project : allianzsteel
 *
 *  Created by Issarapong Wongyai on 10/7/2558 11:36
 *  Copyright 2015 Issarapong Wongyai. All rights reserved.
 *
 *
 */


namespace Main\CTL;


use Main\Context\Context;
use Main\Http\RequestInfo;
use Main\View\HtmlView;
use Main\View\JsonView;
use Main\ThirdParty\Xcrud\Xcrud;

/**
 * @Restful
 * @uri /
 */
class IndexCTL extends BaseCTL {

    /**
     * @GET
     */
    public function index () {
        return new HtmlView('/index');
    }

    /**
     * @GET
     * @uri contact
     */
    public function contact () {
        return new HtmlView('/contact');
    }

    /**
     * @GET
     * @uri about
     */
    public function about () {
        return new HtmlView('/about');
    }

    /**
     * @GET
     * @uri product
     */
    public function product () {
        return new HtmlView('/product');
    }

}
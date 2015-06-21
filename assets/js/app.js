/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, angular */

var app  = angular.module('application', ['ngRoute']);
var Global = {};
var baseurl = angular.element('meta[name="baseUrl"]').attr('content');
Global['baseurl'] = baseurl;
Global['assets'] = baseurl+"assets/";
/* global $ window*/

$(function () {
    'use strict';
   
        if ($(window).innerWidth() <= 498) {
           $(".brand-name").text("HTI System");
        } 
	
    })

$("#print-button").click(function(){
			window.print();
		})


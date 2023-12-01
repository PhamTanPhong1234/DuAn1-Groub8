<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.fc-view>table{
   background: #011D16;
}
.fc-unthemed .fc-divider, .fc-unthemed .fc-popover, .fc-unthemed .fc-row, .fc-unthemed tbody, .fc-unthemed td, .fc-unthemed th, .fc-unthemed thead {
    border-color: #C9AB81 !important;
}
.fc td, .fc th{
    color:#fff;
}
.fc-unthemed .fc-today{
    background:none !important;
}
.fc-unthemed .fc-popover .fc-header{
    background: #004333 !important;
}
.fc-unthemed td.fc-day.fc-widget-content.fc-today.fc-state-highlight{
    -webkit-box-shadow: inset 0px 0px 0px 4px #fff;
    -moz-box-shadow: inset 0px 0px 0px 4px #fff;
    box-shadow: inset 0px 0px 0px 4px #fff;
}
.fc-unthemed .fc-body .fc-day-grid{
    overflow:auto;
}
.fc-unthemed .fc-body .fc-day-grid::-webkit-scrollbar{
    width:0px;
}
.fc-toolbar h2{
    color:#fff;
}
.fc-ltr .fc-basic-view .fc-day-number,
.fc th{
    text-align:left !important;
}
.fc th{
    text-transform:uppercase;
    text-transform: uppercase;
    padding:15px 10px !important;
}
.fc-unthemed thead.fc-head thead{
    background: #CC9902;
}
.fc td.fc-day-number{
    padding:0 10px !important;
}
.calendar-event.section-block{
    padding:60px 0;
}
.fc-toolbar{
    float:left;
    width:100%;
    margin-bottom:30px !important;
}
.fc-toolbar h2{
    text-transform:uppercase;
    font-weight:800;
}
.fc-view-container{
    clear:left;
}
.fc-toolbar button.fc-today-button{
    font-weight:bold;
}
.fc-content-skeleton table tr:nth-child(2n) {
    background-color: transparent;
}
#modalEvento .modal-header {
        background: #CC9902;
    color: #fff;
}
#modalEvento .modal-header .modal-title{
        text-transform: uppercase;
    font-size: 22px;
    margin: 0;
}
#modalEvento button.btn-default{
    background: #CC9902;
    color: #fff;
    text-transform: uppercase;
    width: 50%;
    margin: 0 auto;   
}
.fc-event{
    line-height:normal !important;
}
.fc-event .fc-content h4.fc-title{
    margin:0;
}
.fc-row .fc-content-skeleton tbody td .fc-day-grid-event{
    margin-bottom:3px;
    padding:0 10px;
    cursor:pointer;
}
.fc-day-grid-event .fc-time{
    font-weight:400 !important;
}
.fc-day-grid-event .fc-content {
    white-space: unset !important;
        overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.fc-row .fc-bg .fc-day{
    position:relative;
}
.fc-row .fc-bg .fc-day .btn-booking-event{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    font-weight: 800;
    text-transform: uppercase;
    background: #CC9902;
    color: #fff;
    padding: 3px 6px;
    border-radius: 0.25rem;
    font-size: 14px;
    cursor: pointer;
}
.fc-row .fc-bg .fc-day .label-full{
        position: absolute;
    bottom: 0;
    right: 0;
}
.fc-row .fc-bg .fc-day.fc-other-month{
    opacity:.3;
}
@media (min-width: 576px){
.modal-dialog {
    max-width: 800px;
}
}
@media (min-width:992px){
    .fc th{
        font-size: 24px;
            font-weight: 600;
    }
    .fc-toolbar h2{
        font-size:48px;
        line-height:54px;
    }
    .fc td.fc-day-number{
        font-size:32px;
    }
     .calendar-event .container-fluid {
        padding:20px 12px;
    }
}
@media (min-width: 1400px){
     .fc th{
        font-size: 24px;
            font-weight: 600;
    }
    .fc-toolbar h2{
        font-size:48px;
        line-height:54px;
    }
    .fc td.fc-day-number{
        font-size:32px;
    }
    .calendar-event .container-fluid {
        padding:60px;
    }
}
@media (max-width:991px){
     .calendar-event .container-fluid {
        padding:20px 0;
    }
    .fc-row .fc-content-skeleton tbody td .fc-day-grid-event{
        padding:0;
    }
    .fc-event .fc-content h4.fc-title{
        font-size:14px;
        line-height:20px;
    }
    .fc-day-grid-event .fc-time{
        font-size:12px;
    }
}
@media (max-width:767px){
    .fc-event .fc-content h4.fc-title{
        font-size:10px;
        line-height:16px;
    }
    .fc-day-grid-event .fc-time{
        font-size:8px;
    }
     .fc th{
        padding:3px !important;
        font-size:10px;
    }
}
@media (max-width:575px){
    .fc-event .fc-content h4.fc-title{
        font-size:8px;
        line-height:14px;
            overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }
    .fc .fc-row{
        margin-right:0 !important;
    }
    .fc-scroller{
        height:100% !important;
        overflow:hidden !important;
    }
    .fc-row .fc-bg .fc-day .label-full{
        width:25px;
    }
    a.fc-more{
        font-size:10px !important;
    }
    .fc-toolbar .fc-center{
        text-align:left !important;
    }
    .fc-toolbar .fc-center h2{
        font-size:20px;
        line-height:26px;
    }
}
@media (max-width:450px){
     .fc th{
     font-size: 8px !important;
    }
}

/*  */

/*!
 * FullCalendar v2.6.1 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */
.fc {
    direction: ltr;
    text-align: left
}

.fc-rtl {
    text-align: right
}

body .fc {
    font-size: 1em
}

.fc-unthemed .fc-divider,.fc-unthemed .fc-popover,.fc-unthemed .fc-row,.fc-unthemed tbody,.fc-unthemed td,.fc-unthemed th,.fc-unthemed thead {
    border-color: #ddd
}

.fc-unthemed .fc-popover {
    background-color: #fff
}

.fc-unthemed .fc-divider,.fc-unthemed .fc-popover .fc-header {
    background: #eee
}

.fc-unthemed .fc-popover .fc-header .fc-close {
    color: #666
}

.fc-unthemed .fc-today {
    background: #fcf8e3
}

.fc-highlight {
    background: #bce8f1;
    opacity: .3;
    filter: alpha(opacity=30)
}

.fc-bgevent {
    background: #8fdf82;
    opacity: .3;
    filter: alpha(opacity=30)
}

.fc-nonbusiness {
    background: #d7d7d7
}

.fc-icon {
    display: inline-block;
    width: 1em;
    height: 1em;
    line-height: 1em;
    font-size: 1em;
    text-align: center;
    overflow: hidden;
    font-family: "Courier New",Courier,monospace;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.fc-icon:after {
    position: relative;
    margin: 0 -1em
}

.fc-icon-left-single-arrow:after {
    content: "\02039";
    font-weight: 700;
    font-size: 200%;
    top: -7%;
    left: 3%
}

.fc-icon-right-single-arrow:after {
    content: "\0203A";
    font-weight: 700;
    font-size: 200%;
    top: -7%;
    left: -3%
}

.fc-icon-left-double-arrow:after {
    content: "\000AB";
    font-size: 160%;
    top: -7%
}

.fc-icon-right-double-arrow:after {
    content: "\000BB";
    font-size: 160%;
    top: -7%
}

.fc-icon-left-triangle:after {
    content: "\25C4";
    font-size: 125%;
    top: 3%;
    left: -2%
}

.fc-icon-right-triangle:after {
    content: "\25BA";
    font-size: 125%;
    top: 3%;
    left: 2%
}

.fc-icon-down-triangle:after {
    content: "\25BC";
    font-size: 125%;
    top: 2%
}

.fc-icon-x:after {
    content: "\000D7";
    font-size: 200%;
    top: 6%
}

.fc button {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    height: 2.1em;
    padding: 0 .6em;
    font-size: 1em;
    white-space: nowrap;
    cursor: pointer
}

.fc button::-moz-focus-inner {
    margin: 0;
    padding: 0
}

.fc-state-default {
    border: 1px solid
}

.fc-state-default.fc-corner-left {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}

.fc-state-default.fc-corner-right {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.fc button .fc-icon {
    position: relative;
    top: -.05em;
    margin: 0 .2em;
    vertical-align: middle
}

.fc-state-default {
    background-color: #f5f5f5;
    background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
    background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
    background-image: -o-linear-gradient(top,#fff,#e6e6e6);
    background-image: linear-gradient(to bottom,#fff,#e6e6e6);
    background-repeat: repeat-x;
    border-color: #e6e6e6 #e6e6e6 #bfbfbf;
    border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
    color: #333;
    text-shadow: 0 1px 1px rgba(255,255,255,.75);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)
}

.fc-state-active,.fc-state-disabled,.fc-state-down,.fc-state-hover {
    color: #333;
    background-color: #e6e6e6
}

.fc-state-hover {
    color: #333;
    text-decoration: none;
    background-position: 0 -15px;
    -webkit-transition: background-position .1s linear;
    -moz-transition: background-position .1s linear;
    -o-transition: background-position .1s linear;
    transition: background-position .1s linear
}

.fc-state-active,.fc-state-down {
    background-color: #ccc;
    background-image: none;
    box-shadow: inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05)
}

.fc-state-disabled {
    cursor: default;
    background-image: none;
    opacity: .65;
    filter: alpha(opacity=65);
    box-shadow: none
}

.fc-button-group {
    display: inline-block
}

.fc .fc-button-group>* {
    float: left;
    margin: 0 0 0 -1px
}

.fc .fc-button-group>:first-child {
    margin-left: 0
}

.fc-popover {
    position: absolute;
    box-shadow: 0 2px 6px rgba(0,0,0,.15)
}

.fc-popover .fc-header {
    padding: 2px 4px
}

.fc-popover .fc-header .fc-title {
    margin: 0 2px
}

.fc-popover .fc-header .fc-close {
    cursor: pointer
}

.fc-ltr .fc-popover .fc-header .fc-title,.fc-rtl .fc-popover .fc-header .fc-close {
    float: left
}

.fc-ltr .fc-popover .fc-header .fc-close,.fc-rtl .fc-popover .fc-header .fc-title {
    float: right
}

.fc-unthemed .fc-popover {
    border-width: 1px;
    border-style: solid
}

.fc-unthemed .fc-popover .fc-header .fc-close {
    font-size: .9em;
    margin-top: 2px
}

.fc-popover>.ui-widget-header+.ui-widget-content {
    border-top: 0
}

.fc-divider {
    border-style: solid;
    border-width: 1px
}

hr.fc-divider {
    height: 0;
    margin: 0;
    padding: 0 0 2px;
    border-width: 1px 0
}

.fc-clear {
    clear: both
}

.fc-bg,.fc-bgevent-skeleton,.fc-helper-skeleton,.fc-highlight-skeleton {
    position: absolute;
    top: 0;
    left: 0;
    right: 0
}

.fc-bg {
    bottom: 0
}

.fc-bg table {
    height: 100%
}

.fc table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 1em
}

.fc th {
    text-align: center
}

.fc td,.fc th {
    border-style: solid;
    border-width: 1px;
    padding: 0;
    vertical-align: top
}

.fc td.fc-today {
    border-style: double
}

.fc .fc-row {
    border-style: solid;
    border-width: 0
}

.fc-row table {
    border-left: 0 hidden transparent;
    border-right: 0 hidden transparent;
    border-bottom: 0 hidden transparent
}

.fc-row:first-child table {
    border-top: 0 hidden transparent
}

.fc-row {
    position: relative
}

.fc-row .fc-bg {
    z-index: 1
}

.fc-row .fc-bgevent-skeleton,.fc-row .fc-highlight-skeleton {
    bottom: 0
}

.fc-row .fc-bgevent-skeleton table,.fc-row .fc-highlight-skeleton table {
    height: 100%
}

.fc-row .fc-bgevent-skeleton td,.fc-row .fc-highlight-skeleton td {
    border-color: transparent
}

.fc-row .fc-bgevent-skeleton {
    z-index: 2
}

.fc-row .fc-highlight-skeleton {
    z-index: 3
}

.fc-row .fc-content-skeleton {
    position: relative;
    z-index: 4;
    padding-bottom: 2px
}

.fc-row .fc-helper-skeleton {
    z-index: 5
}

.fc-row .fc-content-skeleton td,.fc-row .fc-helper-skeleton td {
    background: 0 0;
    border-color: transparent;
    border-bottom: 0
}

.fc-row .fc-content-skeleton tbody td,.fc-row .fc-helper-skeleton tbody td {
    border-top: 0
}

.fc-scroller {
    overflow-y: scroll;
    overflow-x: hidden
}

.fc-scroller>* {
    position: relative;
    width: 100%;
    overflow: hidden
}

.fc-event {
    position: relative;
    display: block;
    font-size: .85em;
    line-height: 1.3;
    border-radius: 3px;
    border: 1px solid #3a87ad;
    background-color: #3a87ad;
    font-weight: 400
}

.fc-event,.fc-event:hover,.ui-widget .fc-event {
    color: #fff;
    text-decoration: none
}

.fc-event.fc-draggable,.fc-event[href] {
    cursor: pointer
}

.fc-not-allowed,.fc-not-allowed .fc-event {
    cursor: not-allowed
}

.fc-event .fc-bg {
    z-index: 1;
    background: #fff;
    opacity: .25;
    filter: alpha(opacity=25)
}

.fc-event .fc-content {
    position: relative;
    z-index: 2
}

.fc-event .fc-resizer {
    position: absolute;
    z-index: 3
}

.fc-ltr .fc-h-event.fc-not-start,.fc-rtl .fc-h-event.fc-not-end {
    margin-left: 0;
    border-left-width: 0;
    padding-left: 1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.fc-ltr .fc-h-event.fc-not-end,.fc-rtl .fc-h-event.fc-not-start {
    margin-right: 0;
    border-right-width: 0;
    padding-right: 1px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.fc-h-event .fc-resizer {
    top: -1px;
    bottom: -1px;
    left: -1px;
    right: -1px;
    width: 5px
}

.fc-ltr .fc-h-event .fc-start-resizer,.fc-ltr .fc-h-event .fc-start-resizer:after,.fc-ltr .fc-h-event .fc-start-resizer:before,.fc-rtl .fc-h-event .fc-end-resizer,.fc-rtl .fc-h-event .fc-end-resizer:after,.fc-rtl .fc-h-event .fc-end-resizer:before {
    right: auto;
    cursor: w-resize
}

.fc-ltr .fc-h-event .fc-end-resizer,.fc-ltr .fc-h-event .fc-end-resizer:after,.fc-ltr .fc-h-event .fc-end-resizer:before,.fc-rtl .fc-h-event .fc-start-resizer,.fc-rtl .fc-h-event .fc-start-resizer:after,.fc-rtl .fc-h-event .fc-start-resizer:before {
    left: auto;
    cursor: e-resize
}

.fc-day-grid-event {
    margin: 1px 2px 0;
    padding: 0 1px
}

.fc-day-grid-event .fc-content {
    white-space: nowrap;
    overflow: hidden
}

.fc-day-grid-event .fc-time {
    font-weight: 700
}

.fc-day-grid-event .fc-resizer {
    left: -3px;
    right: -3px;
    width: 7px
}

a.fc-more {
    margin: 1px 3px;
    font-size: .85em;
    cursor: pointer;
    text-decoration: none
}

a.fc-more:hover {
    text-decoration: underline
}

.fc-limited {
    display: none
}

.fc-day-grid .fc-row {
    z-index: 1
}

.fc-more-popover {
    z-index: 2;
    width: 220px
}

.fc-more-popover .fc-event-container {
    padding: 10px
}

.fc-now-indicator {
    position: absolute;
    border: 0 solid red
}

.fc-toolbar {
    text-align: center;
    margin-bottom: 1em
}

.fc-toolbar .fc-left {
    float: left
}

.fc-toolbar .fc-right {
    float: right
}

.fc-toolbar .fc-center {
    display: inline-block
}

.fc .fc-toolbar>*>* {
    float: left;
    margin-left: .75em
}

.fc .fc-toolbar>*>:first-child {
    margin-left: 0
}

.fc-toolbar h2 {
    margin: 0
}

.fc-toolbar button {
    position: relative
}

.fc-toolbar .fc-state-hover,.fc-toolbar .ui-state-hover {
    z-index: 2
}

.fc-toolbar .fc-state-down {
    z-index: 3
}

.fc-toolbar .fc-state-active,.fc-toolbar .ui-state-active {
    z-index: 4
}

.fc-toolbar button:focus {
    z-index: 5
}

.fc-view-container *,.fc-view-container :after,.fc-view-container :before {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box
}

.fc-view,.fc-view>table {
    position: relative;
    z-index: 1
}

.fc-basicDay-view .fc-content-skeleton,.fc-basicWeek-view .fc-content-skeleton {
    padding-top: 1px;
    padding-bottom: 1em
}

.fc-basic-view .fc-body .fc-row {
    min-height: 4em
}

.fc-row.fc-rigid {
    overflow: hidden
}

.fc-row.fc-rigid .fc-content-skeleton {
    position: absolute;
    top: 0;
    left: 0;
    right: 0
}

.fc-basic-view .fc-day-number,.fc-basic-view .fc-week-number {
    padding: 0 2px
}

.fc-basic-view td.fc-day-number,.fc-basic-view td.fc-week-number span {
    padding-top: 2px;
    padding-bottom: 2px
}

.fc-basic-view .fc-week-number {
    text-align: center
}

.fc-basic-view .fc-week-number span {
    display: inline-block;
    min-width: 1.25em
}

.fc-ltr .fc-basic-view .fc-day-number {
    text-align: right
}

.fc-rtl .fc-basic-view .fc-day-number {
    text-align: left
}

.fc-day-number.fc-other-month {
    opacity: .3;
    filter: alpha(opacity=30)
}

.fc-agenda-view .fc-day-grid {
    position: relative;
    z-index: 2
}

.fc-agenda-view .fc-day-grid .fc-row {
    min-height: 3em
}

.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
    padding-top: 1px;
    padding-bottom: 1em
}

.fc .fc-axis {
    vertical-align: middle;
    padding: 0 4px;
    white-space: nowrap
}

.fc-ltr .fc-axis {
    text-align: right
}

.fc-rtl .fc-axis {
    text-align: left
}

.ui-widget td.fc-axis {
    font-weight: 400
}

.fc-time-grid,.fc-time-grid-container {
    position: relative;
    z-index: 1
}

.fc-time-grid {
    min-height: 100%
}

.fc-time-grid table {
    border: 0 hidden transparent
}

.fc-time-grid>.fc-bg {
    z-index: 1
}

.fc-time-grid .fc-slats,.fc-time-grid>hr {
    position: relative;
    z-index: 2
}

.fc-time-grid .fc-content-col {
    position: relative
}

.fc-time-grid .fc-content-skeleton {
    position: absolute;
    z-index: 3;
    top: 0;
    left: 0;
    right: 0
}

.fc-time-grid .fc-business-container {
    position: relative;
    z-index: 1
}

.fc-time-grid .fc-bgevent-container {
    position: relative;
    z-index: 2
}

.fc-time-grid .fc-highlight-container {
    z-index: 3
}

.fc-time-grid .fc-event-container {
    position: relative;
    z-index: 4
}

.fc-time-grid .fc-now-indicator-line {
    z-index: 5
}

.fc-time-grid .fc-helper-container {
    position: relative;
    z-index: 6
}

.fc-time-grid .fc-slats td {
    height: 1.5em;
    border-bottom: 0
}

.fc-time-grid .fc-slats .fc-minor td {
    border-top-style: dotted
}

.fc-time-grid .fc-slats .ui-widget-content {
    background: 0 0
}

.fc-time-grid .fc-highlight-container {
    position: relative
}

.fc-time-grid .fc-highlight {
    position: absolute;
    left: 0;
    right: 0
}

.fc-ltr .fc-time-grid .fc-event-container {
    margin: 0 2.5% 0 2px
}

.fc-rtl .fc-time-grid .fc-event-container {
    margin: 0 2px 0 2.5%
}

.fc-time-grid .fc-bgevent,.fc-time-grid .fc-event {
    position: absolute;
    z-index: 1
}

.fc-time-grid .fc-bgevent {
    left: 0;
    right: 0
}

.fc-v-event.fc-not-start {
    border-top-width: 0;
    padding-top: 1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.fc-v-event.fc-not-end {
    border-bottom-width: 0;
    padding-bottom: 1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.fc-time-grid-event {
    overflow: hidden
}

.fc-time-grid-event .fc-time,.fc-time-grid-event .fc-title {
    padding: 0 1px
}

.fc-time-grid-event .fc-time {
    font-size: .85em;
    white-space: nowrap
}

.fc-time-grid-event.fc-short .fc-content {
    white-space: nowrap
}

.fc-time-grid-event.fc-short .fc-time,.fc-time-grid-event.fc-short .fc-title {
    display: inline-block;
    vertical-align: top
}

.fc-time-grid-event.fc-short .fc-time span {
    display: none
}

.fc-time-grid-event.fc-short .fc-time:before {
    content: attr(data-start)
}

.fc-time-grid-event.fc-short .fc-time:after {
    content: "\000A0-\000A0"
}

.fc-time-grid-event.fc-short .fc-title {
    font-size: .85em;
    padding: 0
}

.fc-time-grid-event .fc-resizer {
    left: 0;
    right: 0;
    bottom: 0;
    height: 8px;
    overflow: hidden;
    line-height: 8px;
    font-size: 11px;
    font-family: monospace;
    text-align: center;
    cursor: s-resize
}

.fc-time-grid-event .fc-resizer:after {
    content: "="
}

.fc-time-grid .fc-now-indicator-line {
    border-top-width: 1px;
    left: 0;
    right: 0
}

.fc-time-grid .fc-now-indicator-arrow {
    margin-top: -5px
}

.fc-ltr .fc-time-grid .fc-now-indicator-arrow {
    left: 0;
    border-width: 5px 0 5px 6px;
    border-top-color: transparent;
    border-bottom-color: transparent
}

.fc-rtl .fc-time-grid .fc-now-indicator-arrow {
    right: 0;
    border-width: 5px 6px 5px 0;
    border-top-color: transparent;
    border-bottom-color: transparent
}

    </style>
</head>
<body>
    <section class="bread-crumb has-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-container text-center">
            <h1 class="title-page">Calendar of event</h1>
        </div>
    </section>

    <div class="calendar-event bg-green" style="background-image:none;">
    <div class="article-wraper mt-30">
        <section class="container-fluid">
            <article class="article-main">
                    <div class="article-details clearfix">
                        <div class="article-content clearfix">
                            <div class="rte">
                                <input type="hidden" id="javascriptLang" value="{&quot;text_read_event_title_name&quot;:&quot;Title&quot;,&quot;text_read_event_nothing_written&quot;:&quot;Nothing here...&quot;,&quot;text_edit_event&quot;:&quot;Edit Event&quot;,&quot;text_new_event&quot;:&quot;New Event&quot;,&quot;button_save&quot;:&quot;Save&quot;,&quot;text_wait&quot;:&quot;Wait...&quot;,&quot;text_delete_title&quot;:&quot;Are you sure?&quot;,&quot;text_delete_desc&quot;:&quot;Do you really want to delete this event? Once it is deleted, all the repetitions of the same event will also be deleted!&quot;,&quot;text_delete_yes&quot;:&quot;Yes, delete!&quot;,&quot;text_delete_no&quot;:&quot;Cancel&quot;,&quot;text_delete_success_title&quot;:&quot;Success!&quot;,&quot;text_delete_success_desc&quot;:&quot;Event deleted successfully!&quot;,&quot;text_delete_error_title&quot;:&quot;Oops!&quot;,&quot;text_delete_error_desc&quot;:&quot;Something went wrong during the process! Try again later or contact the administrator!&quot;,&quot;text_save_error_desc&quot;:&quot;Oops, it was not possible to save the event! Try again later or contact the administrator!&quot;,&quot;format_print_event_date&quot;:&quot;dddd - MMMM DD, YYYY&quot;,&quot;format_print_event_time&quot;:&quot; h:mm a&quot;,&quot;label_repeat&quot;:&quot;Repeat&quot;,&quot;opening&quot;:&quot;Time&quot;}">
                                <div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-toolbar"><div class="fc-left"></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">Today</button></div><div class="fc-center"><h2>December 2023</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th><th class="fc-day-header fc-widget-header fc-sun">Sun</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-day-grid-container" style=""><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 150px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2023-11-27" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2023-11-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2023-11-29" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2023-11-30"></td><td class="fc-day fc-widget-content fc-fri fc-today fc-state-highlight" data-date="2023-12-01" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/318193362_557441875802705_8098443585346848480_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a><a class="btn-booking-event d-none">Book now</a><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-12-02" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-12-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2023-11-27">27</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2023-11-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2023-11-29">29</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2023-11-30">30</td><td class="fc-day-number fc-fri fc-today fc-state-highlight" data-date="2023-12-01">1</td><td class="fc-day-number fc-sat fc-future" data-date="2023-12-02">2</td><td class="fc-day-number fc-sun fc-future" data-date="2023-12-03">3</td></tr></thead><tbody><tr><td class="fc-event-container" rowspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-11-27" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"> <h4 class="fc-title">HAPPY PARTY _ 40PAX</h4></div></a></td><td rowspan="3"></td><td class="fc-event-container" rowspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-11-29" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"><h4 class="fc-title">BIRTHDAY PARTY - 180 PAX</h4><span class="fc-time">17:00</span> </div></a></td><td rowspan="3"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-01" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"><h4 class="fc-title">HAPPY LUNCH-14pax</h4><span class="fc-time">11:00</span> </div></a></td><td class="fc-event-container" rowspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-02" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"> <h4 class="fc-title">BIRTHDAY PARTY - 70 PAX</h4></div></a></td><td rowspan="3"></td></tr><tr><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-01" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"><h4 class="fc-title">CHRISTMAS PARTY - 49 PAX</h4><span class="fc-time">18:00</span> </div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+2 more</a></div></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-01" data-image="https://bizmansky.vn/image/catalog/318193362_557441875802705_8098443585346848480_n.jpg"><div class="fc-content"><h4 class="fc-title">EVENT - 12 PAX</h4><span class="fc-time">19:00</span> </div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 150px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-12-04"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-12-05"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-12-06"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-12-07"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-12-08"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-12-09" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-12-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-future" data-date="2023-12-04">4</td><td class="fc-day-number fc-tue fc-future" data-date="2023-12-05">5</td><td class="fc-day-number fc-wed fc-future" data-date="2023-12-06">6</td><td class="fc-day-number fc-thu fc-future" data-date="2023-12-07">7</td><td class="fc-day-number fc-fri fc-future" data-date="2023-12-08">8</td><td class="fc-day-number fc-sat fc-future" data-date="2023-12-09">9</td><td class="fc-day-number fc-sun fc-future" data-date="2023-12-10">10</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-09" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"> <h4 class="fc-title">EVENT - 30 PAX</h4></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 150px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-12-11"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-12-12"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-12-13"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-12-14"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-12-15" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-12-16"></td><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-12-17"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-future" data-date="2023-12-11">11</td><td class="fc-day-number fc-tue fc-future" data-date="2023-12-12">12</td><td class="fc-day-number fc-wed fc-future" data-date="2023-12-13">13</td><td class="fc-day-number fc-thu fc-future" data-date="2023-12-14">14</td><td class="fc-day-number fc-fri fc-future" data-date="2023-12-15">15</td><td class="fc-day-number fc-sat fc-future" data-date="2023-12-16">16</td><td class="fc-day-number fc-sun fc-future" data-date="2023-12-17">17</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-15" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"> <h4 class="fc-title">Year End Party - 120 PAX</h4></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 150px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-12-18"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-12-19"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-12-20" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-12-21"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-12-22" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/318193362_557441875802705_8098443585346848480_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-12-23"></td><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-12-24"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-future" data-date="2023-12-18">18</td><td class="fc-day-number fc-tue fc-future" data-date="2023-12-19">19</td><td class="fc-day-number fc-wed fc-future" data-date="2023-12-20">20</td><td class="fc-day-number fc-thu fc-future" data-date="2023-12-21">21</td><td class="fc-day-number fc-fri fc-future" data-date="2023-12-22">22</td><td class="fc-day-number fc-sat fc-future" data-date="2023-12-23">23</td><td class="fc-day-number fc-sun fc-future" data-date="2023-12-24">24</td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-20" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"><h4 class="fc-title">Farewell Party - 15 Pax</h4><span class="fc-time">18:00</span> </div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-22" data-image="https://bizmansky.vn/image/catalog/318193362_557441875802705_8098443585346848480_n.jpg"><div class="fc-content"> <h4 class="fc-title">Year End Party - 110 PAX</h4></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 150px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-12-25"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-12-26" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-12-27"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-12-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2023-12-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2023-12-30"></td><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2023-12-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-future" data-date="2023-12-25">25</td><td class="fc-day-number fc-tue fc-future" data-date="2023-12-26">26</td><td class="fc-day-number fc-wed fc-future" data-date="2023-12-27">27</td><td class="fc-day-number fc-thu fc-future" data-date="2023-12-28">28</td><td class="fc-day-number fc-fri fc-future" data-date="2023-12-29">29</td><td class="fc-day-number fc-sat fc-future" data-date="2023-12-30">30</td><td class="fc-day-number fc-sun fc-future" data-date="2023-12-31">31</td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2023-12-26" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"><h4 class="fc-title">Year End Party - 50 PAX</h4><span class="fc-time">18:00</span> </div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 155px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2024-01-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2024-01-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2024-01-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2024-01-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2024-01-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2024-01-06" style="background-image: url(&quot;https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><a class="btn-booking-event d-none">Book now</a></td><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2024-01-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2024-01-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2024-01-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2024-01-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2024-01-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2024-01-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2024-01-06">6</td><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2024-01-07">7</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end" style="background-color:#00a65a;border-color:#00a65a" data-date="2024-01-06" data-image="https://bizmansky.vn/image/catalog/340500372_445193644475401_2173054832202182465_n.jpg"><div class="fc-content"> <h4 class="fc-title">Year End Party - 40 PAX</h4></div></a></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                <div class="modal fade" id="modalEvento" tabindex="-2" role="dialog" aria-labelledby="myModalEvento">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header bg-blue d-block">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalEvento"><a href="" target="_blank"></a></h4>
                                      </div>
                                      <div class="modal-body">
                                          <!--<div class="event-bg">
                                              <img src="" />
                                          </div>-->
                                          <ul>
                                              <li>
                                                  Time: <span class="event-time"></span> <span class="event-date"></span>
                                              </li>
                                              <li class="event-desc">
                                                  Event: <span></span>
                                              </li>
                                              <li class="event-operared event-operared-bizman">
                                                  <span>Operated by Bizman Sky</span>
                                              </li>
                                              <li class="event-operared event-operared-customer">
                                                  <span>Business Event</span>
                                              </li>
                                              <li class="event-link">
                                                  View details: <a href="" target="_blank" style="text-decoration:underline">Here</a>
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="modal-footer">
                                        <div class="col-sm-12">
                                          <button type="button" class="btn btn-default btn-block" onclick="$('html, body').animate({scrollTop: $('#home_newsletter').offset().top}, 500);">Booking now</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>
        </section>
    </div>
</div>

<div class="newsletter__social social bg-green">
    <span>Follow us:</span>
    <ul class="list-inline">           
        <li>
            <a href="#" target="_blank">
                <img src="./images/fb.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/ins.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/youtube.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/tri.png" />
            </a>
        </li>
    </ul>   
</div>

<div class="section-block fancybox_0 wrapper-newsletter home_newsletter newsletter" style="background: url('https://bizmansky.vn/image/catalog/background/Booking.png');    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;" id="home_newsletter">    
    <div class="overlay"></div>    
    <div class="container">        
        <form class="form-newsletter" id="form-newsletter-0" method="post" action="checkout/checkout">
            <div class="section-title form-newsletter__heading m-0">
                <h2>Book a table</h2>
            </div>
            <div class="form-newsletter__description item-des text-center">
                <p>Please leave your request in detail if any. All information that you supply will be kept confidential by us.</p>            </div>
            <div class="form-newsletter__inside">
                <input type="hidden" name="module_code" value="newsletter.376">
                                    <input type="hidden" name="api_link" value="">
                                <input type="hidden" name="required" value="{&quot;phone&quot;:&quot;1&quot;}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-newsletter__item">                            
                            
                            <span class="form-newsletter__notification"></span>
                            <div class="btn-action text-center">
                                <a href="/duan/index.php?action=booking_contact" type="submit" name="submitNewsletter" class="btn btn-submit bizman-button" value="Subscribe">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" value="1" name="action">
        </form>
    </div>
</div>

</body>
</html>
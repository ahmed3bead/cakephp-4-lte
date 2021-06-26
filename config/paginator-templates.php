<?php
return [
    'number' => '<li class="page-item "><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'nextActive' => '<li class="page-item next"><a class="page-link" rel="next" href="{{url}}">{{text}}</a></li>',
    'nextDisabled' => '<li class="page-item next disabled"><a class="page-link" href="" onclick="return false;">{{text}}</a></li>',
    'prevActive' => '<li class="page-item prev"><a class="page-link" rel="prev" href="{{url}}">{{text}}</a></li>',
    'prevDisabled' => '<li class="page-item prev disabled"><a class="page-link" href="" onclick="return false;">{{text}}</a></li>',
    'counterRange' => '{{start}} - {{end}} of {{count}}',
    'counterPages' => '{{page}} of {{pages}}',
    'first' => '<li class="page-item first"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'last' => '<li class="page-item last"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a class="page-link" href="">{{text}}</a></li>',
    'ellipsis' => '<li class="page-item ellipsis">&hellip;</li>',
    'sort' => '<a class="page-link" href="{{url}}">{{text}}</a>',
    'sortAsc' => '<a class="page-link" class="asc" href="{{url}}">{{text}}</a>',
    'sortDesc' => '<a class="page-link" class="desc" href="{{url}}">{{text}}</a>',
    'sortAscLocked' => '<a class="page-link" class="asc locked" href="{{url}}">{{text}}</a>',
    'sortDescLocked' => '<a class="page-link" class="desc locked" href="{{url}}">{{text}}</a>',
];

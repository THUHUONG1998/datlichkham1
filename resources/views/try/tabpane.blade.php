
@extends('pages.layout.layouts')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="group-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                <li role="presentation" class="dropdown">
                    <a href="#" role="tab" data-toggle="dropdown">Dropdown <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> 
                        <li><a href="#child1" aria-controls="child1" role="tab" data-toggle="tab">Dropdown Child 1</a></li> 
                        <li><a href="#child2" aria-controls="child2" role="tab" data-toggle="tab">Dropdown Child 2</a></li>
                        <li><a href="#child3" aria-controls="child3" role="tab" data-toggle="tab">Dropdown Child 3</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">This is Home content</div>
                <div role="tabpanel" class="tab-pane" id="profile">This is Profile content</div>
                <div role="tabpanel" class="tab-pane" id="messages">This is Messages content</div>
                <div role="tabpanel" class="tab-pane" id="settings">This is Settings content</div>
                <div role="tabpanel" class="tab-pane" id="settings">This is Settings content</div>
                <div role="tabpanel" class="tab-pane" id="child1">This is Dropdown Child 1 content</div>
                <div role="tabpanel" class="tab-pane" id="child2">This is Dropdown Child 2 content</div>
                <div role="tabpanel" class="tab-pane" id="child3">This is Dropdown Child 3 content</div>
            </div>
        </div>
    </div>
</div>
@endsection
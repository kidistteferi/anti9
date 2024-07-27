<li class="{{ Request::is('admin/head/heads*') ? 'active' : '' }}">
    <a href="{!! route('admin.head.heads.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               Heads
    </a>
</li>

<li class="{{ Request::is('admin/receiver/receivers*') ? 'active' : '' }}">
    <a href="{!! route('admin.receiver.receivers.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               Receivers
    </a>
</li>

<li class="{{ Request::is('admin/complaints*') ? 'active' : '' }}">
    <a href="{!! route('admin.complaints.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               Complaints
    </a>
</li>

<li class="{{ Request::is('admin/messages*') ? 'active' : '' }}">
    <a href="{!! route('admin.messages.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="home" data-size="18"
               data-loop="true"></i>
               Messages
    </a>
</li>


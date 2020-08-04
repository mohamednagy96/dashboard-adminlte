<div class="card card-default">
    <div class="card-header with-border">
        <h3 class="card-title">
            @if (isset($title))
                {{ $title }}
            @endif
        </h3>
        <div class="card-tools">
        @if (isset($create))
            @if(isset($Side_address))
               <a href="{{ $create }}" class="btn btn-primary"><span class="fa fa-plus"></span> {{$Side_address}} </a>
            @else
              <a href="{{ $create }}" class="btn btn-primary"><span class="fa fa-plus"></span>{{__('Create New')}}</a>
            @endif
        @endif

        @if (isset($tools))
            {{ $tools }}
        @endif

        @if(isset($edit))
              <a href="{{ $edit }}" class="btn btn-primary"><span class="fa fa-plus"></span> Edit </a>
        @endif
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{ $slot }}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->


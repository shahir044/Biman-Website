@if (\Session::has('success'))
    <div class="alert alert-success text-center">

        <script type="text/javascript">
            jQuery(function() {
                One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: 'Successfully Uploaded on Website'});
            });
        </script>
        
        {{-- {!! \Session::get('success') !!} --}}

    </div>
@endif

@if (\Session::has('failures'))

    <script type="text/javascript">
        jQuery(function() {
            One.helpers('notify', {type: 'warning', icon: 'fa fa-exclamation mr-1', message: 'Unsuccessful Operation!'});
        });
    </script>

@endif
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title>{{ ucwords($title_page ?? "Cửa hàng thực phẩm dinh dưỡng LaSen")   }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" sizes="32x32" type="image/png" href="uploads/2023/icon_danhmuc/food.png" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




        @yield('css')

        {{-- Thông báo --}}
        @if(session('toastr'))
            <script>
                var TYPE_MESSAGE = "{{session('toastr.type')}}";
                var MESSAGE = "{{session('toastr.message')}}";
            </script>
        @endif
    </head>
    <body>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
        <script>
            var DEVICE = '{{  device_agent() }}'
        </script>
        @yield('script')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){

            $('#sort').on('change',function(){

                var url = $(this).val();
                // alert(url);
                  if (url) {
                      window.location = url;
                  }
                return false;
            });

        });
        </script>
        <script type="text/javascript">
            $('#keywords').keyup(function(){

                var query = $(this).val();

                  if(query != '')
                    {


                     $.ajax({
                      url:"{{url('/autocomplete-ajax')}}",
                      method:"GET",
                      data:{query:query},
                      success:function(data){
                       $('#search_ajax').fadeIn();
                        $('#search_ajax').html(data);
                      }
                     });

                    }else{

                        $('#search_ajax').fadeOut();
                    }
            });

            $(document).on('click', '.li_search_ajax', function(){
                $('#keywords').val($(this).text());
                $('#search_ajax').fadeOut();
            });
        </script>
        <script>
            $('input.input-qty').each(function() {
              var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
              if (min == 0) {
                var d = 0
              } else d = min
              $(qty).on('click', function() {
                if ($(this).hasClass('minus')) {
                  if (d > min) d += -1
                } else if ($(this).hasClass('plus')) {
                  var x = Number($this.val()) + 1
                  if (x <= max) d += 1
                }
                $this.attr('value', d).val(d)
              })
            })
            </script>

    </body>
</html>

<!-- jQuery JS -->
<script src="{{ asset('assets/js/jquery.1.12.4.min.js')}}"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    function deleteCartItem(event) {
        event.preventDefault();
        url = event.target.parentElement.getAttribute('href');
        $.ajax({
            url: url,
            type:'POST',
            data: {
                _token : '{{ csrf_token() }}'
            }
        }).done(function(result) {
            if(result.key){
                $(`#${result.key}`).remove();
            }
            if(result.count == 0){
                $('.shopping-cart-content').
                html(`<div class="no-cart">
                            <div>
                                <img src="{{ asset('./images/empty_cart4fcc.png') }}" alt="">
                                <p>Không có sản phẩm nào</p>
                            </div>
                         </div>`)
            }
            if(result.total){
                $('.totalShoppingCart').html(result.total+"đ")
            }
            $('.count-style').html(result.count)
        });
    }
    function addToCart (event) {
        event.preventDefault();
        url = event.target.parentElement.getAttribute('href');
        $.ajax({
            url: url,
            type:'POST',
            data: {
                _token : '{{ csrf_token() }}'
            }
        }).done(function(result) {
            if(result.success) notifyAddCart(result.success,'success');
            if(result.warning) notifyAddCart(result.warning,'warning');
            if(result.error) notifyAddCart(result.error,'danger');
            $('.cart-small-header').html(result.listUnstyled)
            $('.count-style').html(result.count)
        });
    }

    function notifyAddCart(message,icon){
        Toast.fire({
            icon: icon,
            title: message,
            position: 'top-end'
        })
    }
{{--    @if(Session::has('message'))--}}
{{--    Toast.fire({--}}
{{--        icon: 'success',--}}
{{--        title: "{{ Session::get('message') }}",--}}
{{--        position: 'top-end'--}}
{{--    })--}}
{{--    {{ Session::put('message', null) }}--}}
{{--    @endif--}}
{{--    @if(Session::has('error'))--}}
{{--    Toast.fire({--}}
{{--        icon: 'error',--}}
{{--        title: "{{ Session::get('error') }}",--}}
{{--        position: 'top-end'--}}
{{--    })--}}
{{--    {{ Session::put('error', null) }}--}}
{{--    @endif--}}
{{--    @if(Session::has('warning'))--}}
{{--    Toast.fire({--}}
{{--        icon: 'warning',--}}
{{--        title: "{{ Session::get('warning') }}",--}}
{{--        position: 'top-end'--}}
{{--    })--}}
{{--    {{ Session::put('warning', null) }}--}}
{{--    @endif--}}
</script>

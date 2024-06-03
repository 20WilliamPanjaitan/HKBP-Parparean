@if(Auth::user()->role == "admin")

<script>
    // Redirect to another route immediately
    window.location.href = "admin/index";
</script>

@else
<script>
    // Redirect to another route immediately
    window.location.href = "beranda";
</script>
@endif
@extends('admin.master')

@section('content')
<form class="print_order">
    <input class="btn btn-danger" type="button" onClick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">
<h1>Category Details</h1>
<p>category name:{{ $category->category_name }}</p>
<p>category description:{{ $category->category_description}}</p>
<p>category status:{{ $category->category_status}}</p>


@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
<col width="3%">
<col width="10%">
<col width="10%">
<col width="45%">
<col width="30%">
<col width="2%">

<script type="text/javascript" defer>
    function fcAppendColumn (element, className, innerHtml) {
        let fcColumn = document.createElement('td');
        fcColumn.className = className;
        fcColumn.append(innerHtml);
        element.after(fcColumn);
    }

    function fcGetLinkElement(oxid , className, innerHtml = '[{oxmultilang ident="FCPROFITMARGIN_PROFIT_NULL"}]') {
        let fcLinkDiv = document.createElement('a');
        fcLinkDiv.href = "Javascript:top.oxid.admin.editThis('" + oxid + "')";
        fcLinkDiv.className = className
        fcLinkDiv.innerHTML = innerHtml;
        return fcLinkDiv;
    }

    let fcOldHandler = window.onload;
    window.onload = function (e) {
        fcOldHandler(e);
        fcAppendColumn(document.getElementsByClassName('listheader first')[0].nextElementSibling, 'listheader', '[{oxmultilang ident='FCPROFITMARGIN_PROFIT_MARGIN'|upper}]');
        document.getElementsByClassName('listfilter first')[0].nextElementSibling.nextElementSibling.setAttribute('colspan', '2');
        document.getElementsByClassName('pagination')[0].setAttribute('colspan', '6');
    }
</script>
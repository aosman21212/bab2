<table class="table table-bordered">
    <tbody>
        <tr>
            <th>                Client Services name</th>
            <td>{{ $productservices->productServiceName }}</td>
        </tr>
        <tr>
            <th>Vendor name </th>
            <td>{{ $productservices->vendorid->vendorName }}</td>
        </tr>
        <tr>
            <th>Client name</th>
            <td>{{$productservices->clientid->clientName}}</td>
            
        </tr>
        <tr>
    <th>Service type</th>
    <td>{{ $productservices->servicetypeid->TypeName }}</td>
</tr>
        <tr>
            <th>Initiatedquantity</th>
            <td>{{ $productservices->initiatedQuantity }}</td>
        </tr>
        <tr>
            <th>Recurringfees</th>
            <td>{{ $productservices->recurringFees }}</td>
        </tr>
        <tr>
            <th>Additionalfees</th>
            <td>{{ $productservices->additionalFees }}</td>
        </tr>
        <tr>
            <th>Recurringperiod</th>
            <td>{{ $productservices->recurringPeriod }}</td>
        </tr>
        <tr>
            <th>Added by</th>
            <td>{{ $productservices->addedby->name}}</td>
        </tr>
      
        <tr>
            <th>Productservicestatus</th>
            <td>{{ $productservices->productServiceStatus }}</td>
        </tr>
    
   

    </tbody>
</table>



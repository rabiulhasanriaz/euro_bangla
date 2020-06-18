<!DOCTYPE html>
<html>
   <head>
      <title>EURO-BANGLA-EXPO</title>
   </head>
   <body style="text-align:center;">
      <h1>EURO-BANGLA-EXPO</h1>
      <h3>Student-Registration</h3>
      <table>
        <tr>
           <td>Institute Name</td>
           <td> : </td>
           <td>{{ $institute_info->institute_name }}</td>
        </tr>
        <tr>
           <td>Country</td>
           <td> : </td>
           <td>{{ $institute_info->institute_country }}</td>
        </tr>
        <tr>
           <td>Address</td>
           <td> : </td>
           <td>{{ $institute_info->institute_address }}</td>
        </tr>
         <tr>
            <td>Website</td>
            <td> : </td>
            <td>{{ $institute_info->institute_website }}</td>
         </tr>
         <tr>
            <td>Contact Person Name</td>
            <td> : </td>
            <td>{{ $institute_info->contact_person_name }}</td>
         </tr>
         <tr>
            <td>Phone Number</td>
            <td> : </td>
            <td>{{ $institute_info->phone_number }}</td>
         </tr>
         <tr>
            <td>Email</td>
            <td> : </td>
            <td>{{ $institute_info->email }}</td>
         </tr>
         <tr>
            <td>Alternative Email</td>
            <td> : </td>
            <td>{{ $institute_info->alternative_email }}</td>
         </tr>
         <tr>
            <td>Sponsorship</td>
            <td> : </td>
            <td>{{ ($institute_info->sponsorship == 1)?'Yes':'No' }}</td>
         </tr>
         <tr>
            <td>Sponsorship Package</td>
            <td> : </td>
            <td>{{ $institute_info->sponsorship_package }}</td>
         </tr>
      </table>
   </body>
</html>

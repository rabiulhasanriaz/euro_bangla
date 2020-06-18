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
            <td>Name</td>
            <td> : </td>
            <td>{{ $student_info->full_name }}</td>
         </tr>
         <tr>
            <td>Date Of Birth</td>
            <td> : </td>
            <td>{{ $student_info->date_of_birth }}</td>
         </tr>
         <tr>
            <td>City Of Residence</td>
            <td> : </td>
            <td>{{ $student_info->city_of_residence }}</td>
         </tr>
         <tr>
            <td>Institute</td>
            <td> : </td>
            <td>{{ $student_info->institute }}</td>
         </tr>
         <tr>
            <td>Phone Number</td>
            <td> : </td>
            <td>{{ $student_info->phone_number }}</td>
         </tr>
         <tr>
            <td>WhatsApp Number</td>
            <td> : </td>
            <td>{{ $student_info->whatsapp_number }}</td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td> : </td>
            <td>{{ $student_info->email_address }}</td>
         </tr>
         <tr>
            <td>Academic Interest</td>
            <td> : </td>
            <td>{{ $student_info->academic_interest }}</td>
         </tr>
         <tr>
            <td>Preferred Course</td>
            <td> : </td>
            <td>{{ $student_info->preferred_course }}</td>
         </tr>
      </table>
   </body>
</html>

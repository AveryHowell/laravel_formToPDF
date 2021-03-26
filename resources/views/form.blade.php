
<form method="post" action="submitmyform">	
@csrf {{ csrf_field() }} 
	<p>
		<label>Name</label>
		<input type="text" name="name" value="{{ old("name")}}"/>
	</p>
     <p>
     <label>Email</label>
		<input type="text" name="email" value="{{ old("email")}}"/>	
     </p>
	<p>
     <label>Phone #</label>
		<input type="text" name="phone_number" value="{{ old("phone_number")}}"/>	
     </p>
	 <label>DOB</label>
		<input type="text" name="dob" value="{{ old("dob")}}"/>	
     </p>
      <p>
      	<input type="submit" name="Submit">
      </p>
</form>
@extends('emails.default')

@section('content')
	<h3>New Inquiry</h3>

	<table class="table table-bordered">
		<tr>
			<td width="100">Name:</td>
			<td>{{ $inquiry->name }}</td>
		</tr>
		<tr>
			<td>eMail:</td>
			<td><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td>{{ $inquiry->phone }}</td>
		</tr>
		<tr>
			<td>Passport No.</td>
			<td>{{ $inquiry->passport }}</td>
		</tr>
		<tr>
			<td>Message:</td>
			<td>{{ $inquiry->message }}</td>
		</tr>
	</table>
@endsection
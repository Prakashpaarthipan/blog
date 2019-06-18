<html>
<body>
    <p><b> AWESOME YOU GOT ALL BRANCHES  </b></p>
<table>
	<thead>
		<tr>
			<td>BRNCODE</td>
			<td>BRNNAME</td>
			<td>NICNAME</td>
			<td>COMMODE</td>
		</tr>
	</thead>
	<tbody>
		 @if(count($datas)>0)
	    	@foreach($datas as $data)
	    			<tr>
						<td>{{ $data['BRNCODE'] }}</td>
						<td>{{ $data['BRNNAME'] }}</td>
						<td>{{ $data['NICNAME'] }}</td>
						<td>{{ $data['COMMODE'] }}</td>
				   </tr>
	    	@endforeach
	    @endif
	</tbody>
</table>
</body>
</html>
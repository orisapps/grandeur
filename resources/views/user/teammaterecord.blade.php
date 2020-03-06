@forelse ($gen as $gen)
<tr class="even pointer">
<td class="a-center ">
 <input type="checkbox" class="flat" name="table_records">
</td>
<td class=" ">{{$gen->created_at}}</td>
<td class=" ">{{$gen->fullname}}</td>
<td class=" ">{{$gen->gender}}</td>
<td class=" ">{{$gen->mobile}}</td>
<td class=" ">{{$gen->country}}</td>
<td class=" ">{{$gen->point}}</td>
<td class=" ">{{$gen->username}}</td>

<td class="a-right a-right ">{{$gen->status}}</td>
<td class=" last"><a href="consdetails.aspx?consid=4415693">{{$gen->action}}</a></td>
</tr>
@empty
<p>No Records Found</p>
@endforelse

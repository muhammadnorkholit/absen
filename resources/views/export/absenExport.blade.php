
<table>
      @foreach ($ruang as $r)
            <tr colspan="6">
            <tr colspan="6">
            <tr colspan="6">
            <th align="center" colspan="6" style="font-size: 15px;font-weight: bold; width:800px" >{{'Ruangan no'}} {{$r->no_ruangan}} di lab {{$r->nama_ruangan}}</th>
        </tr>
        <tr colspan="6"></tr>
        <tr>
            <td style="background-color: #F49D1A;border:1px solid #000" colspan="6" align="center">Sesi 1</td>
        </tr>
        <tr>
            <td style="background-color: #F49D1A;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:200px">nama</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:250px">kelas</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:100px">status</td>
            <td style="background-color: #F49D1A;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer1 = 1;
        @endphp
    
        @foreach ($data as $row)
        @if ($row->sesi == 1 && $r->id  == $row->id_ruangan)
                <tr>
                    <td style="border:1px solid #000">{{$nomer1++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{$row->nama}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status}}</td>
                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
            @endif
        @endforeach

        <tr colspan="6"></tr>
        <tr colspan="6"></tr>

        <tr>
            <td style="background-color: #5F8D4E;border:1px solid #000" colspan="6" align="center">Sesi 2</td>
        </tr>
        <tr>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:200px">nama</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:250px">kelas</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px">status</td>
            <td style="background-color: #5F8D4E;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer2 = 2;
        @endphp
        @foreach ($data as $row)
            @if ($row->sesi == 2 && $r->id  == $row->id_ruangan)
            @foreach ($jurusan as $j )
                @if($j->id == $row->id_jurusan)
                <tr>
                    <td style="border:1px solid #000">{{$nomer2++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{$row->nama}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status}}</td>
                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
                @endif
            @endforeach

            @endif
        @endforeach
        
        <tr colspan="6"></tr>
        <tr colspan="6"></tr>

        <tr>
            <td style="background-color: #DC3535;border:1px solid #000" colspan="6" align="center">Sesi 3</td>
        </tr>
        <tr>
            <td style="background-color: #DC3535;border:1px solid #000;width:50px">#</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:100px" align="left">NISN</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:200px">nama</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:250px">kelas</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:100px">status</td>
            <td style="background-color: #DC3535;border:1px solid #000;width:100px">sesi</td>
        </tr> 
        
        @php
            $nomer3 = 3;
        @endphp
        @foreach ($data as $row)
            @if ($row->sesi == 3 && $r->id  == $row->id_ruangan)
                <tr>
                    <td style="border:1px solid #000">{{$nomer3++}}</td>
                    <td style="border:1px solid #000">{{$row->nisn}}</td>
                    <td style="border:1px solid #000">{{$row->nama}}</td>
                    <td style="border:1px solid #000">{{$row->kelas . ' ' . $row->jurusan . ' ' . $row->no_kelas}}</td>
                    <td style="border:1px solid #000">{{$row->status}}</td>
                    <td style="border:1px solid #000">{{$row->sesi}}</td>
                </tr>
            @endif
        @endforeach
      @endforeach
</table>
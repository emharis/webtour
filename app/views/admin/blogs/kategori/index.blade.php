<div class="main-inner">
    <div class="container">
        <div class="row">
            <!-- /span6 -->
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-table"></i>
                        <h3>Kategori Manager</h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                        <?php $rownum = 1; ?>
                        <a class="btn btn-primary pull-right ajax-link" href="{{URL::to('admin/kategori/new')}}">New</a>
                        <div class="clearfix"></div>
                        <table class="table table-bordered tabledata datatable">
                            <thead>
                                <tr>
                                    <th class="span1">No</th>
                                    <th>Nama</th>
                                    <th class="span1">Published</th>
                                    <th class="span1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kats as $kat)
                                <tr>
                                    <td></td>
                                    <td>{{$kat->nama}}</td>
                                    <td>
                                        @if($kat->publish == 'Y')
                                        <i class="icon-ok"></i>
                                        @else
                                        <i class="icon-remove"></i>
                                        @endif
                                    </td>
                                    <td style="font-size: 1.3em;">
                                        <a class="ajax-link" href="{{URL::to('admin/kategori/edit/'.$kat->id)}}" ><i class="icon-edit"></i></a>
                                        &nbsp;
                                        <a class="ajax-link delete-link" href="{{URL::to('admin/kategori/delete/'.$kat->id)}}" ><i class="icon-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /widget-content -->
                </div>
                <!-- /widget -->
            </div>
            <!-- /span6 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tabledata').dataTable({
           "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                $("td:first", nRow).html(iDisplayIndex +1);
               return nRow;
            },
            "sPaginationType": "full_numbers"
        });
    });
</script>

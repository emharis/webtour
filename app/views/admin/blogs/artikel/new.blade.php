<div class="main-inner">
    <div class="container">
        <div class="row">
            <!-- /span6 -->
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-download-alt"></i>
                        <h3>New Artikel</h3>
                    </div>
                    <!-- /widget-header -->
                    <div class="widget-content">
                        {{Form::open(array('url'=>URL::to('admin/artikel/new'),'id'=>'form-new','class'=>'form-horizontal','files'=>true))}}
                        <fieldset>
                            <div class="control-group">											
                                <label class="control-label" >Kategori</label>
                                <div class="controls">
                                    {{Form::select('kategori',$kats,null,array('required'))}}
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="control-group">											
                                <label class="control-label" >Judul</label>
                                <div class="controls">
                                    {{Form::text('judul',null,array('class'=>'span10','required','autocomplete'=>'off'))}}
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="control-group">											
                                <label class="control-label" >Konten</label>
                                <div class="controls">
                                    {{Form::textarea('konten',null,array('class'=>'span10'))}}
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="control-group">											
                                <label class="control-label" >Image</label>
                                <div class="controls">
                                    <label class="checkbox inline">
                                        {{Form::checkbox('isurl')}} Image is url
                                    </label>
                                    <br/>
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="control-group">											
                                <label class="control-label" ></label>
                                <div class="controls ">
                                    {{Form::text('imageurl',null,array('class'=>'span10','autocomplete'=>'off'))}}
                                    {{Form::file('image')}}
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="control-group">											
                                <label class="control-label" >Publish</label>
                                <div class="controls">
                                    {{Form::select('publish',array('Y'=>'Publish','N'=>'Dont Publish'),'Y',array('required'))}}
                                </div> <!-- /controls -->				
                            </div> <!-- /control-group -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button> 
                                <a class="btn ajax-link" href="{{URL::to('admin/artikel')}}" >Cancel</a>
                            </div> <!-- /form-actions -->
                        </fieldset>
                        {{Form::close()}}
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
    $(document).ready(function () {
        $('input[name=judul]').focus();
        $('select[name=kategori]').val([]);
        function imageinputhandle() {
            if ($('input[name=isurl]').is(':checked')) {
                $('input[name=image]').hide();
                $('input[name=imageurl]').show();
            } else {
                $('input[name=image]').show();
                $('input[name=imageurl]').hide();
            }
        }
        imageinputhandle();
        //input checkbox event
        $('input[name=isurl]').change(function () {
            imageinputhandle();
        });
        $('#form-new').ajaxForm({
            target: $(this).attr('action')
        });
        $('#form-new').submit(function (e) {
            e.preventDefault();
            //show notify
            //$('form').notify('Data telah disimpan',{position:'top center',className:'success'});
            var n = noty({
                text: 'Data telah disimpan',
                layout: 'center',
                type: 'success',
                timeout: 1000
            });

            //clear input
            $('input').val('');
            $('textarea').val('');
            $('select').val([]);
            //set focus to input nama
            $('input[name=nama]').focus();
        });
    });
</script>

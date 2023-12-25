@extends('shopify-app::layouts.default')

@section('content')
    <p>hellow world fvcccccc</p>
@endsection

@section('script')
    @parent 
    <script>
        const titleBarOptions = {
            title:'My Page Title'
        };
        const myTitleBar = actions.TitleBar.create(app,titleBarOptions)

        const modalOptions = {
            title:'My Modal',
            message:'hello modal world',
        };
        const myModal = actions.Modal.create(app, modalOptions);

        myModal.dispatch(actions.Modal.Action.OPEN);
    </script>
@endsection
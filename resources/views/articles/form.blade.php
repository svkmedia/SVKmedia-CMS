{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}

{!! Form::label('body', 'Body:') !!}
{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

{!! Form::label('published_at', 'Publish On:') !!}
{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

{!! Form::label('tag_list', 'Tags:') !!}
{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}

{!! Form::submit($submitButtonText, ['class' => 'form-control']) !!}
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h4 mb-4 font-weight-bold">
            投稿の新規作成
        </h1>
 
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
 
            <fieldset class="mb-4">
 
                <div class="form-group">
                    <label for="name">
                        名前
                    </label>
                    <input
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        type="text"
                    >
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="category_id">
                        カテゴリー
                    </label>
                    <input
                        id="category_id"
                        name="category_id"
                        class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                        value="{{ old('category_id') }}"
                        type="text"
                    >
                    @if ($errors->has('category_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('category_id') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="photo">
                        写真
                    </label>
                    <input
                        id="photo"
                        name="photo"
                        class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}"
                        type="file"
                        accept="image/jpeg, image/png"
                    >
                    @if ($errors->has('photo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('photo') }}
                        </div>
                    @endif
                </div>
 
                <div class="form-group">
                    <label for="comment">
                        コメント
                    </label>
 
                    <textarea
                        id="comment"
                        name="comment"
                        class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('comment') }}</textarea>
                    @if ($errors->has('comment'))
                        <div class="invalid-feedback">
                            {{ $errors->first('comment') }}
                        </div>
                    @endif
                </div>
 
                <div class="mt-5">
                    <a class="btn btn-secondary" href="{{ route('posts.index') }}">
                        キャンセル
                    </a>
 
                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
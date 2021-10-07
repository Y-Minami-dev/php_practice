<?php
//エイリアスに追加したファサードを呼び出す。
use \InterventionImage;

//formからの画像リクエストはimagefileで受け付けしたのでimagefileを設定しています。formに合わせて変更してください。
$file = $request->file('image');
$name = $file->getClientOriginalName();
//アスペクト比を維持、画像サイズを横幅1080pxにして保存する。
InterventionImage::make($file)->resize(1080, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('public/image' . $filename ) );;
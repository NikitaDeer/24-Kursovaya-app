<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Build;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BuildResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BuildResource\RelationManagers;

class BuildResource extends Resource
{
    protected static ?string $model = Build::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
    protected static ?string $navigationGroup = 'Управление моделями';

    protected static ?string $navigationLabel = 'Готовые сборки';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Section::make('Предоставляемая услуга')
                ->schema([
                  TextInput::make('name')
                    ->label(__('Наименование:')),
                  Textarea::make('description')
                    ->label(__('Описание:')),

                  FileUpload::make('image_path') //загрузка фотографий
                    ->image()
                    ->directory('images')
                    ->label(__('Фотография:')),

                  FileUpload::make('zip_path') //загрузка zip-архивов
                    ->label('Upload Zip File')
                    ->acceptedFileTypes(['application/zip', 'application/x-zip-compressed'])
                    // ->maxFileSize(1024)
                    ->directory('images') // Папка, где будут храниться загруженные файлы
                    ->visibility('public'), // Если необходимо, чтобы файл был доступен для скачивания

                  Toggle::make('is_published')->label(__('Опубликовать')),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->label('Наименование')
                ->limit(10),
              TextColumn::make('description')
                ->searchable()
                ->sortable()
                ->limit(25)
                ->label('Описание'),

              ImageColumn::make('image_path')->circular()->label('Фото'),

              TextColumn::make('created_at')
                ->dateTime('d-m-Y H:i')
                ->label('Дата создания'),
              ToggleColumn::make('is_published')
                ->sortable()
                ->label('Опубликованно'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBuilds::route('/'),
            'create' => Pages\CreateBuild::route('/create'),
            'edit' => Pages\EditBuild::route('/{record}/edit'),
        ];
    }
}

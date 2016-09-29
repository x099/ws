json.extract! articulo, :id, :titulo, :descripcion, :created_at, :updated_at
json.url articulo_url(articulo, format: :json)
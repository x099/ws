class CreateProductos < ActiveRecord::Migration[5.0]
  def change
    create_table :productos do |t|
      t.string :nombre
      t.string :categoria
      t.float :precio

      t.timestamps
    end
  end
end

class AddSlugToPages < ActiveRecord::Migration
  def change
    add_column :pages, :slug, :string
    add_column :pages, :title, :string
  end
end

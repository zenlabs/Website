class AddOrdenToPages < ActiveRecord::Migration
  def change
    add_column :pages, :orden, :integer
  end
end

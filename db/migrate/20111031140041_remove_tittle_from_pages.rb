class RemoveTittleFromPages < ActiveRecord::Migration
  def up
    remove_column :pages, :tittle
  end

  def down
    add_column :pages, :tittle, :string
  end
end

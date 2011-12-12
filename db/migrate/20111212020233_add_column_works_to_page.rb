class AddColumnWorksToPage < ActiveRecord::Migration
  def change
    add_column :pages, :works, :text
  end
end

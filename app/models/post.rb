class Post < Page
  default_scope self.tagged_with(['blog'], :on => :tags, :any=>true).order('created_at DESC')
  has_many :comments, :as => :commentable
end

class BlogController < ApplicationController
  def index
    @posts = Post.all
  end

  def show
    @post = Post.find(params[:id])
  end

  def create_comment
    @post = Post.find(params[:blog_id])
    @comment = Comment.new(params[:comment])
    @comment.commentable = @post

    respond_to do |wants|
      if @comment.save
        flash[:notice] = 'Comment was successfully created.'
        wants.html { redirect_to(:back) }
      else
        wants.html { render :action => "show" }
      end
    end
  end
end

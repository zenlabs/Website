class VideosController < ApplicationController
  def show
    @galleries = Gallery.all
    @gallery = Gallery.find(params[:gallery_id])
    @video = Video.find(params[:id])
  end
end

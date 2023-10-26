type Post = {
    id: number;
    title: string;
    slug: string;
    excerpt: string;
    content: string;
    post_category_id: number;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    category?: PostCategory | null;
    thumbnail?: string | null;
}

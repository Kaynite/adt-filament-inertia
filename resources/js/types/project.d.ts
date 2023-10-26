type Project = {
    id: number;
    name: string;
    slug: string;
    excerpt: string | null;
    content: string;
    project_category_id: number;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    category?: ProjectCategory | null;
    thumbnail?: string | null;
}

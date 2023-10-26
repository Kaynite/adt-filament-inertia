type JobFair = {
    id: number;
    title: string;
    slug: string;
    excerpt: string | null;
    content: string;
    event_date: string /* Date */ | null;
    from: string /* Date */ | null;
    to: string /* Date */ | null;
    location: string | null;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    thumbnail: string | null;
    gallery: any;
}

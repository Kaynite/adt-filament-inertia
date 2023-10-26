type PostCategory = {
    id: number;
    name: string;
    color: string;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
    posts?: Post[] | null;
    icon: string | null;
}

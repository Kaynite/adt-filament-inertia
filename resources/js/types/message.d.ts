type Message = {
    id: number;
    full_name: string;
    phone: string;
    email: string;
    message: string;
    is_new: boolean;
    created_at: string /* Date */ | null;
    updated_at: string /* Date */ | null;
}
